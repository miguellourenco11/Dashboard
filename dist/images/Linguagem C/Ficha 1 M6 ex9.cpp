#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int classificacao;
	
	printf("Introduza um número de 1 a 4 \n");
	scanf("%d",&classificacao);
	
	switch(classificacao)
	{
		case 1: printf("Fraco \n");break;
		case 2: printf("Satisfatório \n");break;
		case 3: printf("Bom \n");break;
		case 4: printf("Muito Bom \n");break;
		
		default: printf("Opção inválida");
	}
	
	printf("\n");	
	system("pause");
}
