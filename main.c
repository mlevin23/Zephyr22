#include <stdio.h>
#include <stdlib.h>
#include <time.h>

void main(){
    int choice = 0;
    float newTMP = 0.0;
    float currentTMP = 0.0;
    printk("What would you like to do? %s\n");
    printk("1. Adjust Temperature %s\n");
    printk("2. Adjust TOD Temperature %s\n");
    scanf("%d", choice);
  
    switch(choice){
      case 1:
            printk("What would you like to change the temp to?%s\n");
            scanf("%f", newTMP); //Since we are using printk, do we need to use scank instead of scanf?
            if(newTMP > currentTMP){
                //ACTIVATE HEATING;
            }
            else if(newTMP < currentTMP){
                //ACTIVATE COOLING;
            }
            break;            
      case 2: //TODO
    }
}
