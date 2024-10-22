#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");

	inicio:
	
	system("cls");
	
	srand(time(NULL));
	
	int vet[10],max=0,min=1000,posicao;
	
	for (int i=1; i<=10; i++)
	{
		vet[i]=rand()%100;
		printf("%d \n",vet[i]);
		if(vet[i]>max)
		{
			max=vet[i];
			posicao=i;
		}
	}
	
	printf(" %d é o valor mais alto e está na posição %d \n",max,posicao);
	char resp;
	printf("\n");
	printf("Pretende repetir o programa? S/N \n");
	scanf("%s",&resp);
	if(resp=='s'||resp=='S')
		goto inicio;
	else
		printf("O programa acabou \n");
}
