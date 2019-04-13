// The function below is the method for establishing a connection to a server. This function will take the device and connect it to the primary zephyr home system, as well as returning if it does connect.
bool establishConnection()
{
  connection = false
  IF Server exists and is online
    establish connection and return true;
  ENDIF
}

// This function will connect the server to the user device to get information. Requires a user id to connect to.
bool connectDevice(int id)
{
  connection = false
  IF user exists and is online
    establish connection and return true;
  ENDIF
}

// This function will add a user a new ID (increments statically), and requires a power-level and name. Power levels are arrranged as follows:
1) Child (access to very few functions)
2) Grandparent
3) Parent
4) Admin
void addUser(int level, string name)
{
  static ID = 0;
  INSERT USER(ID, level, name)
}

// This function will remove a user by searching for their id and removing the relevant entity. Will return false if the user is not found.
bool deleteUser(int ID)
{
  delete = false
  IF user found by id
    delete user
    delete = true
  ENDIF
}

// This function is a little bit complicated. It will pull the relevant data of the user that is inputted in the parameters. It will return the
relevant parameter if the user as a string. If no user is found by the ID or the data is not found, then the function will return the "false" as a string.
The searchable parameters are: level, name, GPS (their coordinates, returned as "latitude, longitude")
string pullData(int ID, string parameter)
{
  data = "false"
  IF parameter exists && ID exists && data exists
      data = (data)
  ENDIF
  return data;

}

// The function below will constantly update the server to the location of all connected users with the format <id, lattitude, longetude>,
for each user, through GPS. If the lattitude and longetude matches that of the home, then it will use bluetooth to create a more accurate
tracking method. It will ping a user every x amount of time, where x can be set by the administrator in the main settings. Will return 0 for
lattitude and longetude if the user cannot be connected to.
double[] locateUsers()
{
  location = null
  FOR each user
      location = pullData(ID, GPS)
  ENDFOR
  IF location == houseLocation
    enable bluetooth
    pull bluetooth data

}

// This function will check every x seconds, where x is set in the main settings,  where a user is in the house, and will enable the lights in the house
until the user leaves. If the bluetooth data no longer corresponds to the room data, then the lights will turn off. Each room will have its own bluetooth
receiver with a room location.
void enableLights()
{
  WHILE (1)
    FOR each user
      IF locateUsers == roomData
        enable lights
      ELSE
        disable enableLights
      ENDIF
    ENDFOR
  ENDWHILE
}

// This function will check the temperature in household, as long as a connection exists. This will connect from a user device to the server.
double checkTemp()
{
  temp = -1
  IF establishConnection()
    send request to get temperature
  ELSE
    say "No connection found"
    return;
  ENDIF
}

// This function will change the temperature in the house by comparing it to the current tempearture, from a user device.
void setTemp(int temp)
{
  IF establishConnection()
    send request to get temperature
    IF current temp < set temperature
      turn on heat
    ELSE IF current temp > set temperature
      turn on A/C
  ELSE
    say "No connection found"
    return;
  ENDIF
}
