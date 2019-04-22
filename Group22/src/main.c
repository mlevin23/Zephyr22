/*
* Copyright (c) 2012-2014 Wind River Systems, Inc.
 *
 * SPDX-License-Identifier: Apache-2.0
 */

#include <string.h>
#include <zephyr.h>
#include <misc/printk.h>
#include <console.h>

void main(void) {
        console_getline_init();
	int choice = 0;
	int choice2 = 0;
	long newTMP = 0.0; //float
	long currentTMP = 68.0; //Good starting point to initialize the temprature
	long adjTMP = 0.0;
	long newADJTMP = 0.0;
	int tm_hour; // hours in range of 0 to 23
    
	printk("What would you like to do? \n");
	printk("1. Adjust Temperature \n");
	printk("2. Adjust TOD Temperature \n");
	char *s = console_getline();

	choice = atoi(s);
	switch(choice){
      		case 1:
            		printk("What would you like to change the temp to?\n");
            		char *c = console_getline();
			newTMP = atoi(c);
			if(newTMP > currentTMP){
                //ACTIVATE HEATING;
                	printk("am heating");
            		}
            	else if(newTMP < currentTMP){
                //ACTIVATE COOLING;
            		printk("am cooling");
            		}
		break; 

		}
	printk("done");
	return 0;
}
