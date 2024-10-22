#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	srand(time(NULL)); //=randomize
	

	int vet[10]; //primeira posição zero
	
	for (int i=0; i<10; i++)
	{
		vet[i]=rand()%100;
		printf("%d \n",vet[i]);
	}
	
	int max=0,min=1000;
		
	for (int i=0; i<10; i++)
	{
		if(vet[i]>max)
			max=vet[i];
		if(vet[i]<min)
			min=vet[i];
	}
		
	printf("\n");
	printf("O valor máximo = %d \n",max);
	printf("O valor máximo = %d \n",min);
	printf("\n");	
	system("pause");
}
