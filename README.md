# Zephyr22
This is the Zephyr Project for Group 22.

For our project we decided to use Qemu, a leshan server, and an ec2 instance. We believed this to be the best option because while it may have more moving parts, it allows us to create distinct pieces that are separate from each other for future developing.

## How to instructions:

To see both parts of our project the following is required.
#### Part 1:
 1. First go to: https://github.com/TNice/Lashaen-Server-Software-Engineering and complete the setting up of net tools with qemu.
 2. Clone our repository with "git clone https://github.com/mlevin23/Zephyr22.git"
 3. Navigate to the sprint 3 folder and launch the leshan server with "java -jar leshan-server-demo.jar"
 4. Once this is done navigate to localhost:8080 and you will be able to see a json object of the names of the clients that are connected to the leshan server.
 
#### Part 2:
To visit the front end of our server, visit the following link:
http://ec2-3-17-62-112.us-east-2.compute.amazonaws.com/ 

To log in the username is: "test" and the password is: "pass"

We plan to implement a full set of user login instructions in sprint 4. To see all of our issues and where we currently are in the development process, please visit our issues tab.

****************
****************

### Things we have completed:
 - We have uploaded our front end up to the ec2 instance above, as well as created a method for reading the connected clients to our leshan server.
 
### Things we still need:
 - We need to all the use cases for front end. Appliances is currently being developed and temperature will be worked on next.
 - We need to complete the general backend prototype for passing connected clients and then specialize that fr each of our use cases.
 
 
****************
****************

### Overwhelming technical issues:
 - The Leshan server does not have any form of lamp so access to anything outside of the leshan server is difficult and we are currently working on solving this issue. For more information as well as what we have attempted please check the issues.
