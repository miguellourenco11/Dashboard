#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	srand(time(NULL)); 
	
	int vet[50],soma; 
	
	for (int i=0; i<50; i++)
	{
		vet[i]=rand()%100;
		soma=soma+vet[i];
		printf("%d \n",vet[i]);
	}
	
	int maior=0,menor=1000;
	
	for (int i=0; i<50; i++)
	{
		if(vet[i]<menor)
			menor=vet[i];
		if(vet[i]>maior)
			maior=vet[i];
	}
	
	float med;
	
	med=soma/(float) 50;
	printf("\n");
	
	printf("A média dos valores é %.2f \n",med);
	printf("O maior valor é %d e o menor é %d \n",maior,menor);
	
	printf("\n");	
	system("pause");
}
