#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	float vet[5];
	
	for(int i=0; i<5; i++)
	{
		printf("Introduza o salário de um funcionário da empresa \n");
		scanf("%f",&vet[i]);
		vet[i]=vet[i]-vet[i]*0.15;
	}
	
	printf("\n");
	
	for(int i=0; i<5; i++)
	{
		printf("O salário reduzido do %dº funcionário da empresa é %.2f \n",i,vet[i]);
	}
	
	printf("\n");
	system("pause");
	
}
