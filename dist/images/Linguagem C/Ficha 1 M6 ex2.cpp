#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int valor1,valor2,soma=0,multi=1;
	
	printf("Introduza dois valores inteiros \n");
	scanf("%d" "%d",&valor1,&valor2);
	
	if(valor1!=valor2)
	{
		for(int i=valor1; i<=valor2; i++)
		{
			if(i % 2==0)
				soma=soma+i;
			else
				multi=multi*i;
		}
	}
	else
		printf("Os dois valores têm de ser diferentes. \n");

	printf("A soma dos valores pares no intervalo dos dois valores introduzidos é %d \n",soma);
	printf("A multiplicação dos valores ímpares no intervalo dos dois valores introduzidos é %d \n",multi);
	
	system("pause");
}
