#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	srand(time(NULL)); //=randomize
	
	int vet[5]; //primeira posição zero
	
	for (int i=0; i<5; i++)
	{
		vet[i]=rand()%10;
		printf("%d \n",vet[i]);
	}

	printf("\n");	
	system("pause");
}
