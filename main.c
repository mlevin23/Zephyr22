#include <stdio.h>
#include <stdlib.h>
#include <time.h>

long changeADJTMP(long adjTMP);

void main(){
    int choice = 0; //int
    int choice2 = 0;
    long newTMP = 0.0; //float
    long currentTMP = 68.0; //Good starting point to initialize the temprature
    long adjTMP = 0.0;
    long newADJTMP = 0.0;
    int tm_hour; // hours in range of 0 to 23
    
    printk("What would you like to do? \n");
    printk("1. Adjust Temperature \n");
    printk("2. Adjust TOD Temperature \n");
    scanf("%d", choice);
  
    switch(choice){
      case 1:
            printk("What would you like to change the temp to?\\n");
            scanf("%ld", newTMP); //Since we are using printk, do we need to use scank instead of scanf?
            if(newTMP > currentTMP){
                //ACTIVATE HEATING;
                printk("am heating");
            }
            else if(newTMP < currentTMP){
                //ACTIVATE COOLING;
                printk("am cooling");
            }
            break;            
      case 2:
            printk("How would you like to adjust the TOD?\n");
            printk("Would you like to adjust the \n1. Morning Temperature\n2.Afternoon Temperature\n3.Evening Temperature\n?");
            scanf("%d", choice2);
            
            switch(choice2){
                    case 1: // M0RNING 
                        printk("What would you like to adjust the morning temperature to?");
                        scanf("%d", adjTMP);
                        if ( 0 < tm_hour <= 11 ) {
                            newADJTMP = changeADJTMP(adjTMP);
                            
                        }    
                        break;
                            
                    case 2: // AFTERNOON
                        printk("What would you like to adjust the morning temperature to?");
                        scanf("%d", adjTMP);
                        if ( 11 < tm_hour <= 17 ) {
                            newADJTMP = changeADJTMP(adjTMP);
                            
                        } 
                        break;
                            
                    case 3: // EVENING
                        printk("What would you like to adjust the morning temperature to?");
                        scanf("%d", adjTMP);
                        if ( 17 < tm_hour <= 23) {
                            newADJTMP = changeADJTMP(adjTMP);
                            
                        }    
                        break;
                            
            break;
               
                     
    }
}
}                            
long changeADJTMP(long adjTMP){
    long adjTMPVAL;
    //TODO
    return adjTMPVAL;
}
