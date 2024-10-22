#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	srand(time(NULL)); //=randomize
	
	int soma=0;
	float med;
	int vet[5]; //primeira posição zero
	
	for (int i=0; i<5; i++)
	{
		vet[i]=rand()%10;
		printf("%d \n",vet[i]);
		soma=soma+vet[i];
	}
	
	med=soma/(float)5;
	
	printf("a soma é %d \n",soma);
	printf("a média é %.2f \n",med);
	printf("\n");	
	system("pause");
}
