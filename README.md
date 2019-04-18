# Zephyr22
This is the Zephyr Project for Group 22.


## How to instructions:
We built our Zephyr home system to work for Ubuntu 18.04. To build the repository set up your environment here:

https://docs.zephyrproject.org/latest/getting_started/
***************
Once it is downloaded clone our repository using:

git clone https://github.com/mlevin23/Zephyr22.git
***************
Build our project by navigating into the Zephyrproject/zephyr folder and use the command:

west build -b qemu_x86 samples/hello_world
***************
Then run the program using:

west build -t run
