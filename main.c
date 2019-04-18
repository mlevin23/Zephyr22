#include <stdio.h>
#include <stdlib.h>
#include <time.h>

void main(){
    int choice = 0; //int
    long newTMP = 0.0; //float
    long currentTMP = 68.0; //Good starting point to initialize the temprature
    long adjTMP = 0.0;
    
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
                            int adjTMPVAL = adjTMP;
                            adjTMPVAL = currentTMP;
                        }
                        
                    
                    break;
                    case 2: // Afternoon
                    case 3: //Evening
                    
            break;
               
            //Do we want to create a menu here?
            //How should we adjust the TOD temprature?            
    }
}
