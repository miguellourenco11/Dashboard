#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>
#include <math.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int num;
		
	printf("introduza um número \n");
	scanf("%d",&num);
	
	if(num % 2==0)
		printf("O número é par");
	else
		printf("O número é ímpar");
	
	printf("\n");	
	system("pause");
}
