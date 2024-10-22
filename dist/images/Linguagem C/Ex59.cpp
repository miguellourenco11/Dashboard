#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");

	char palavra[50],palavra2[50];

	printf("introduza duas palavras \n");
	scanf("%s" "%s",&palavra,&palavra2);

	int valor = strcmp(palavra,palavra2);
	printf("Valor do STRCMP %d \n",valor);
	
	if(valor==0)
		printf("As palavras são iguais");
	else
		printf("As palavras são diferentes");

	printf("\n");
	system("pause");
}
