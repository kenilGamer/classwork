#include<stdio.h>

/**
    UDF 1 : No parameters no return
*/

void msg(); /// declaration

void main(){
    msg(); /// calling
    msg();
    msg();
    msg();
    msg();
    msg();
    msg();
    msg();
}

void msg(){ /// definition
    printf("\n Welcome to world of UDF in C");
}
