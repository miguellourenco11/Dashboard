#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	srand(time(NULL)); 
	
	int vet[10],soma,par=0,impar=0; 
	
	for (int i=0; i<10; i++)
	{
		vet[i]=rand()%100;
		soma=soma+vet[i];
		printf("%d \n",vet[i]);
		if(vet[i] %2==0)
			par++;
		else
			impar++;
	}
	
	float med;
	
	med=soma/(float) 10;
	printf("\n");
	
	printf("A m�dia dos 10 valores � %.2f \n",med);
	printf("Foram contabilizados %d n�meros pares e %d n�meros �mpares \n",par,impar);
	
	printf("\n");	
	system("pause");
}
