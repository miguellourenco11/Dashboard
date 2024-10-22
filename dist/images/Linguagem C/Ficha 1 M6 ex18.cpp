#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>
#include <math.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	srand(time(NULL)); 
	
	int vet[5],soma; 
	
	for (int i=0; i<5; i++)
	{
		printf("introduza um valor \n");
		scanf("%d",&vet[i]);
	}
	printf("\n");
	for (int i=0; i<5; i++)
	{
		printf("%d \n",vet[i]);
	}
	printf("\n");
	int dobro,quadrado;
	float raizquadrada;
	
	for (int i=0; i<5; i++)
	{
		dobro=vet[i]*2;
		quadrado=vet[i]*vet[i];
		raizquadrada=sqrt(vet[i]);
		printf("O dobro do %dº valor é %d \n",vet[i],dobro);
		printf("O quadrado do %dº valor é %d \n",vet[i],quadrado);
		printf("A raiz quadrada do %dº valor é %.2f \n",vet[i],raizquadrada);
		printf("\n");
	}
	
	printf("\n");	
	system("pause");
}
