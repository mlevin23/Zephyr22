#include <stdio.h>
#include <stdlib.h>
#include <time.h>

long changeADJTMP(long adjTMP);

void main(){
    int choice = 0; //int
    long newTMP = 0.0; //float
    long currentTMP = 68.0; //Good starting point to initialize the temprature
    long adjTMP = 0.0;
    long newADJTMP = 0.0;
    
    printk("What would you like to do? %s\n");
    printk("1. Adjust Temperature %s\n");
    printk("2. Adjust TOD Temperature %s\n");
    scanf("%d", choice);
  
    switch(choice){
      case 1:
            printk("What would you like to change the temp to?%s\n");
            scanf("%ld", newTMP); //Since we are using printk, do we need to use scank instead of scanf?
            if(newTMP > currentTMP){
                //ACTIVATE HEATING;
            }
            else if(newTMP < currentTMP){
                //ACTIVATE COOLING;
            }
            break;            
      case 2:
            printk("How would you like to adjust the TOD?%s\n");
            printk("Would you like to adjust the \n1. Morning Temperature\n2.Afternoon Temperature\n3.Evening Temperature%s\n?");
            scanf("%d", choice2);
            
            switch(choice2){
                    case 1: // Morning
                        printk("What would you like to adjust the morning temperature to?%s");
                        scanf("%d", adjTMP);
                        for ( // TOD = MORNING ) {
                            newADJTMP = changeADJTMP(adjTMP);
                            
                        }    
                        break;
                            
                    case 2: // Afternoon
                        printk("What would you like to adjust the morning temperature to?%s");
                        scanf("%d", adjTMP);
                        for ( // TOD = AFTERNOON ) {
                            newADJTMP = changeADJTMP(adjTMP);
                            
                        } 
                        break;
                            
                    case 3: //Evening
                        printk("What would you like to adjust the morning temperature to?%s");
                        scanf("%d", adjTMP);
                        for ( // TOD = EVENING ) {
                            newADJTMP = changeADJTMP(adjTMP);
                            
                        }    
                        break;
                            
            break;
               
                     
    }
}
                            
long changeADJTMP(long adjTMP){
    long adjTMPVAL;
    //TODO
    return adjTMPVAL;
}
