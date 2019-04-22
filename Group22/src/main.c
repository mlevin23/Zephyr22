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
            		*s = console_getline();
			newTMP = atoi(s);
			if(newTMP > currentTMP){
                //ACTIVATE HEATING;
                	printk("am heating\n");
            		}
            	else if(newTMP < currentTMP){
                //ACTIVATE COOLING;
            		printk("am cooling\n");
            		}
		break; 

	case 2:
            printk("How would you like to adjust the TOD?\n");
            printk("Would you like to adjust the \n1. Morning Temperature\n2.Afternoon Temperature\n3.Evening Temperature\n?");
            *s = console_getline();
            choice2 = atoi(s);

            
		switch(choice2){
			case 1: // M0RNING 
			printk("What would you like to adjust the morning temperature to?");
			*s = console_getline();
			adjTMP = atoi(s);
			if ( 0 < tm_hour && tm_hour <= 11 ) {
				newADJTMP = changeADJTMP(adjTMP);    
			}    
			break;
                            
			case 2: // AFTERNOON
			printk("What would you like to adjust the morning temperature to?");
			*s = console_getline();
			adjTMP = atoi(s);
			if ( 11 < tm_hour && tm_hour <= 17 ) {
				newADJTMP = changeADJTMP(adjTMP);
			} 
			break;
                          
			case 3: // EVENING
			printk("What would you like to adjust the morning temperature to?");
			*s = console_getline();
			adjTMP = atoi(s);
			if ( 17 < tm_hour && tm_hour <= 23) {
				newADJTMP = changeADJTMP(adjTMP);            
			}    
                	break;
                            
        	break;            
		}	
	}
        printk("done");
}


long changeADJTMP(long adjTMP){
    long adjTMPVAL = adjTMP;
    // TODO
    return adjTMPVAL;
}
