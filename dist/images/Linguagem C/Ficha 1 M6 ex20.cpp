#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	srand(time(NULL)); 
	
	int vet[10],vet2[10],conta=0; 
	
	for (int i=0; i<10; i++)
	{
		vet[i]=rand()%100;
		vet2[i]=rand()%100;
		printf("%d \n",vet[i]);
		printf("%d \n",vet2[i]);
	}
	
	for (int i=0; i<10; i++)
	{
		for (int j=0; j<10; j++)
		{	
			if(vet[i]==vet2[j])
				conta++;
		}
	}
	
	printf("Foram contados %d valores iguais \n",conta);
	
	printf("\n");	
	system("pause");
}
