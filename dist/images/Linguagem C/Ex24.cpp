#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int num,min;
	
	printf("Introduza um valor em segundos \n");
	scanf("%d",&num);
	
	min=num/(float)60;
	
	int resto;	
	resto=num%60;
		
	printf("minutos = %d e segundo = %d \n",min,resto);
	
	printf("\n");	
	system("pause");
}
