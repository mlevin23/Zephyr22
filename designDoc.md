## Deployment environment
- The program will be run in qemu, which will require either a mac or a linux pc. The code will be built in the "zephyr" folder of the zephyrproject directory, and can be built and run using west. The zephyr project requires a c toolchain (we used GNU ARRM Embedded), and will require qemu. Additionally the development environment for zephyr will have to be set up on the machine.
- west build -b qemu_x86 "project" // This will be the command to build the directory, with "project" being the name of the project that we create.
- west build -t run // This will actually run the project once it is built with the above command.
- How will data be saved?

## Functional Requirements
1. Lights
  - Purpose: The purpose of this function is to control the lights and sense when a person is entering or leaving a room. When            a person has entered the room, the function will turn on the lights. When a person has left the room, the lights will be turnt off. This function will also learn habits, so for example, if the family comes home at the same time everyday, then the lights function will turn on the lights for them at the same time when they get home every day. The primary trigger will be whenever a user enters and exits a room. The secondary trigger would be when a user manually overrides and leaves the lights on or manyally overrides and leaves the lights off. 
  - Rationale in choosing function: This function was chosen because automatic lights can be an essential part of someone's home who might be very forgetful or who does not like to come home to a dark house. 
  - Usefulness: This function's usefulness is to allow a homeowner, and/or occupants of that home, not have to worry about remembering to turn off the lights when the leave the room or trying to find the lightswitch in a dark room. Thi is to serve as a hands free, automatic light switch which senses when a person enters or leaves the room and adjusts to their habits so it can turn on when they are about to arrive home. This hands-free light system will also allow homeowners to save on their electric bills because they will not accidently leave their lights on anymore. 
2. Child Rocking Crib
 - Purpose: The purpose of this function is to activate the rocking crib. The crib will be activated by the sound of the child crying. Primary trigger will be when a certain noise level is detected by the Zephyr System. A secondary trigger will be when the parents will manually enable the crib to rock. 
 - Rationale in choosing function: This function was chosen because one main source of stress of parents of an infant is being constantly woken up in the middle of the night or just having a crying child during the day. We believed that having a rocking crib that was activated by the sound of your child's cry would be helpful in soothing them and hopfully making the parents job a bit easier. 
 - Usefulness: This function's usefulness comes when one has an infant in the home. Instead of having immediately having to respond to your child when they start crying in the middle of the night, the automatic crib rocker will start rocking them, hopefulling lulling them back to sleep. This function strives to provide more sleep to parents of infants. 
3. Activating Appliances
  - Purpose: This function's purpose is to automatically start certain pre-determined applicanes, such as coffee makers, ovens, etc. The primary trigger will occur with data collection. Once enough data about user patterns is collected, Zephyr will activate appliances at the appropriate time of day.
  - Rationale in choosing function: This function was chosen because many families have a distinct morning routine which is hardly deterred from, such as starting a pot of coffee. If one were to have in the morning, appliances that automatically start your coffee or tea maker and preheated your oven for breakfast, it could cut your morning routine in half. This function was chosen for efficiency and to decrease wasted time in one's day. 
  - Usefulness: This function is useful for families who have a set morning routine and have busy mornings. This function can be used to help families get a jump start on their days, or can help them get lunch/dinner started for when they get home or when they get done with work. 
4. Temperature
  - Purpose: This function's purpose is to automatically set homes to the desired temperature which is determined by whether or not a family is home. When a family leaves, the temperature will be set to a more cost effective degree. When a family is home, the temperature will be set to a more comforatable degree that agrees with the temperature outside. Primary trigger will occur when data starts being collected. Secondary trigger will be when an administrator forces a period of data collection to re-calibrate the system.
  - Rationale in choosing function: This function was chosen because a big money waster for families is the AC/Heater when the weather fluctuate. We thought that one way to help a family be more money efficient would be to have their home regulate their household temperature to a more cost effective degree which would be determined on if the family was at home or if they were out.
  - Usefulness: This function is usefull because families spend thousands of dollars each year on AC/heating. Having a program that could help them split their heating/cooling bill in half would mean a big different for some families. 

## Database Design
______

### ERD




[ERD located here](https://github.com/mlevin23/Zephyr22/blob/master/ERD.PNG)

[Stubs located here](https://github.com/mlevin23/Zephyr22/blob/master/stubs.txt)

### Languages
1. .
  - .
  - .
2. .
  - .
  - .
3. Skill gaps
  - We are hoping to use Rasberry Pi to run our simulation but only one member of our team has experience with is
  - We do not have a vast knowledge of the zephyr program
  - .
