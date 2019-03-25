## Zephyr Use Cases
### Group 22: Kyle Meyer, Maxim Levin, Carolyn Perniciaro

### Users:
* Parents
* Grandparent
* Security/Maintenance Admin
* 12 year old
* Infants

### Activities:
1. Parents
   * Activating appliances at specific times
2. Infants
   * Auto crib rocking at certain volume levels
3. General
   * Automating temperature
   * Lights on/off

### Use Cases:
#### Lights:
* Introduction: In an attempt to save money, families are exploring more and more options to to be frugal. With the assistance of user tracking, Zephyr will attempt to use this technology to reduce the amount families spend on electricity by automatically cutting lights whenever users are not in a room.
* Triggers: The primary trigger will be whenever a user enters and exits a room. The secondary trigger would be when a user manually overrides and leaves the lights on.
* Actors:
 * Primary: All users in the household
 * Secondary: N/A
* Preconditions: Users will need a device to synced to the wireless network that is able to track location in the household.
* Postconditions: The Zephyr home system will have the lights turned on when a user is in a room, and turned off when no user is in a room.
* Main Success Scenario:
 * A device is connected to the Zephyr network.
 * A user enables location tracking through Zephyr.
 * A rule set will be configured about how long it will take for the lights to be turned off, on user exiting the room.
* Alternate Success Scenario:
 * Course 1:
   * A administrator sets up a override rule that will keep the lights on even if a user is not in the room
 * Course 2:
   * A user can manually dim/brighten lights
* Failed End Condition:
 * A loss of signal from the user’s device to the Zephyr system.

#### Diagram
![Lights Use Case](https://user-images.githubusercontent.com/32828119/54890535-cd108f00-4e77-11e9-953d-be32a740537c.png)

#### Child Rocking crib
* Introduction: With younger children in the house, many times when they wake up all the children will require is to be rocked until they fall asleep. With Zephyr the system will track the noise level from the crib (and by extension the child) and rock the crib if the noise level exceeds a set level. If the child is still making noise after a set period of time the Zephyr System will alert the parents through their mobile device.
* Triggers: Primary trigger will be when a certain noise level is detected by the Zephyr System. A secondary trigger will be when the parents will force enable a crib rocking.
* Actors:
 * Primary: Parents and Caretakers
 * Secondary: Children and other uses
* Preconditions: The crib volume sensor, the crib motor to rock it, and the parental device will all have to be connected to the Zephyr Network
* Postconditions: The crib should begin rocking when the volume condition is met.
* Main Success Scenario:
 * The devices will be connected to the Zephyr system
 * Activation conditions will be set up by the parents or caretaker
 * Volume sensor will be enabled by the parent
 * If the volume sensor activates, the system will begin rocking the crib with a silent notification to the parents immediately.
 * After a set amount of time, an alert will go out to the parent or caretaker, alerting them that the child is still  awake.
* Alternate Success Scenarios:
 * Course 1: The parent will manually activate the crib rocking until the parents disable it.
   * The Zephyr system will send a notification to the parent after a set amount of time to make sure the parent did not forget.
* Failed End Condition:
 * A parent’s device is not able to be reached at the time of notification or alert.

#### Diagram
![Rocking Crib Use Case](https://user-images.githubusercontent.com/32828119/54890406-3fcd3a80-4e77-11e9-8fa8-12d028f9c26a.png)

#### Automatic Timer
* Introduction: In day to day life there are many menial and regular operations that a family does, like activating appliances, cleaning, and washing, that can be assisted and automated through Zephyr. Through collecting and sorting through user data, Zephyr can automatically activate appliances, as well as send autonomous vacuum cleaners to clean the house when Zephyr detects there are no users in the house.
* Triggers: The primary trigger will occur with data collection. Once enough data about user patterns is collected, Zephyr will activate appliances at the appropriate time of day.
* Actors:
 * Primary: All users
 * Secondary: None
* Preconditions: All users will need to be synced to the Zephyr system, and must have location data enabled.
* Postconditions: Appliances will be activated at the appropriate time of day, as well as cleaning being activated when no users are home.
* Main Success Scenario:
 * All user devices are connected to the Zephyr network.
 * Users enable location data.
 * Whenever an appliance is activated Zephyr will track and collect the data.
 * After collecting enough data, Zephyr will activate the appliances at the calculated times.
* Alternate Success Scenario:
 * Course 1:
   * Users can manually input activation times for appliances beforehand.
 * Course 2:
Zephyr will track and collect location data of users
   * When there are users not in the house Zephyr will activate the autonomous vacuum cleaner.
* Failure End Condition:
 * Appliances are activated at time that are detrimental to the users.

#### Diagram
![Automatic Timer Use Case](https://user-images.githubusercontent.com/32828119/54890412-45c31b80-4e77-11e9-9265-9a4d1b56e6aa.png)

#### In-house Temperature Control
* Introduction: In an attempt to save money, families are exploring more and more options to to be frugal. With the assistance of user tracking, Zephyr will attempt to use this technology to reduce the amount families spend by automatically regulating temperature based on time of day, time of year, and user statistics.
* Triggers: Primary trigger will occur when data starts being collected. Secondary trigger will be when an administrator forces a period of data collection to re-calibrate the system.
* Actors:
 * Primary: Parents
 * Secondary: All other users in the home
* Preconditions: The method for temperature regulation will need to be connected to the Zephyr system, and data collection will have to be enabled.
* Postconditions: The Zephyr home system will begin automatically raising and lowering the temperature in the home without user input.
* Main Success Scenario:
 * The temperature regulation system will be connected to the Zephyr system.
 * A period of data collection will be set by the parent of administrator of the home.
 * Zephyr will collect data and transmit it to the temperature system.
 * Once the period has ended Zephyr will enter a period of assisted temperature modification where it will require minimal input from the user to fine tune the configuration.
 * After another set period of time Zephyr will automatically modify the temperature of the home.
* Alternate Success Scenario:
 * Course 1:
   * Zephyr will be overridden by the user and disable for a set period of time while the user takes manual control of the temperature for idiosyncratic scenarios.
 * Course 2:
   * The user will manually enable Zephyr’s automatic temperature controls early if they believe that Zephyr can accurately regulate temperature.
 * Course 3:
   * The user can manually force Zephyr to re-calibrate in degrees if they believe the temperature settings are not optimal or need to be changed.
   * Zephyr will enter a indefinite recalibration until the user is satisfied.
* Failure End Condition:
  * Zephyr is not able to modify the temperature of the house to the user’s patterns.
The temperature system will need to totally re-calibrated.

#### Diagram
![Temperature Use Case](https://user-images.githubusercontent.com/32828119/54890542-d699f700-4e77-11e9-848a-2fa404b446c5.png)
