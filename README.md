# Zephyr22
This is the Zephyr Project for Group 22.

For our project we decided to use Qemu. We believed this to be the best option because it would allow us to emulate boards across all machines, as well as emulate many different boards. 

## How to instructions:
We built our Zephyr home system to work for Ubuntu 18.04. To build the repository set up your environment here:

https://docs.zephyrproject.org/latest/getting_started/
***************
Once it is downloaded clone our repository using:

git clone https://github.com/mlevin23/Zephyr22.git
***************
Build our project by navigating into the Zephyrproject/zephyr folder and use the command:

west build -b qemu_x86 samples/Group22
***************
Then run the program using:

west build -t run

****************
****************

Things we have completed:
 - Skeleton for a use case(temperature), as well as a method to take in and modify/compare values in qemu. This creates an outline for the remaining use cases.
 - Basic understanding of the software and development environment that we are working in.
 - Our team has further developed communication skills which has in turn understand aided in our completion of these sprints.
 
Things we still need:
 - We need to flesh out the skeletons of our use cases and implement the 
 -
 -
 -
 
****************
****************

Overwhelming technical issues:
 - We looked through Zephyrs net tools as well as looked at their networking samples
 - We have encountered issues with connecting our sample to a web tool as well as figuring out how to network with Qemu. Additionally we are encoutering issues with understanding Qemu's compiler. From what we understand, it uses a modified version of C. 
 - We tried modifying the function as well as modifying the overall schema to make the functions work better. We tried swapping different libraries however it seems the issue is coming from qemu's compiler not recognizing character to integer conversions.
 - We would benefit from meeting with the other Zephyr groups and brainstorming different methods to create a solution.
 - Maxim went to office hours on April 22nd.
