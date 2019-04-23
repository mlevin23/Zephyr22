/*
* Copyright (c) 2012-2014 Wind River Systems, Inc.
 *
 * SPDX-License-Identifier: Apache-2.0
 */

#include <string.h>
#include <zephyr.h>
#include <misc/printk.h>
#include <console.h>
#include <stdlib.h>
#include <time.h>

long changeADJTEMP(long adjTMP);

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
	printk("2. Adjust the Time of Day Temperatures \n");
	char *a = console_getline();
	choice = atoi(a);
	switch(choice){
      		case 1:
            		printk("What would you like to change the temp to?\n");
            		char *b = console_getline();
			newTMP = atoi(b);
			if(newTMP > currentTMP){
                //ACTIVATE HEATING;
                	printk("Activating heating\n");
            		}
            	else if(newTMP < currentTMP){
                //ACTIVATE COOLING;
            		printk("Activating cooling\n");
            		}
		break; 

	case 2:
            printk("Adjusting the time of the day temperatures.\n");
            printk("Would you like to adjust the: \n1. Morning Temperature\n2. Afternoon Temperature\n3. Evening Temperature\n");
            char *c = console_getline();
            choice2 = atoi(c);

            
		switch(choice2){
			case 1: // M0RNING 
			printk("What would you like to adjust the morning temperature to?\n");
			char *d = console_getline();
			adjTMP = atoi(d);
			if ( 0 < tm_hour && tm_hour <= 11 ) {
				newADJTMP = changeADJTMP(adjTMP);    
			}    
                        printk("New morning temperature set to: %li \n", adjTMP);
			break;
                            
			case 2: // AFTERNOON
			printk("What would you like to adjust the afternoon temperature to?\n");
			char *e = console_getline();
			adjTMP = atoi(e);
			if ( 11 < tm_hour && tm_hour <= 17 ) {
				newADJTMP = changeADJTMP(adjTMP);
			} 
                        printk("New afternoon temperature set to: %li \n", adjTMP);
			break;
                          
			case 3: // EVENING
			printk("What would you like to adjust the evening temperature to?\n");
			char *f = console_getline();
			adjTMP = atoi(f);
			if ( 17 < tm_hour && tm_hour <= 23) {
				newADJTMP = changeADJTMP(adjTMP);            
			}    
                        printk("New evening temperature set to: %li \n", adjTMP);
		       	break;
                            
        	break;            
		}	

	}
        printk("Exiting Successfully.");
}


int changeADJTMP(int adjTMP){
    int adjTMPVAL = adjTMP;
    // TODO
    return adjTMPVAL;
}
