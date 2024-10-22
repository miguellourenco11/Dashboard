#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int valor1,fatorial=1;
	
	printf("Introduza um valor inteiro \n");
	scanf("%d",&valor1);
	
	for(int i=valor1; i>=i; i--)
	{
		fatorial=fatorial*i;	
	}

	printf("\n");
	printf("O fatorial de %d \n",fatorial);
	system("pause");
}
