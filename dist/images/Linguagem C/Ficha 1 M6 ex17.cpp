#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int pontos,quant,vit,emp;
	
	printf("introduza o número de jogos que uma equipa fez \n");
	scanf("%d",&quant);
	printf("Quantos jogos foram vitórias? \n");
	scanf("%d",&vit);
	printf("Quantos jogos foram empates? \n");
	scanf("%d",&emp);
	
	pontos=vit*3+emp*2+(quant-(vit+emp));
	
	printf("A equipa fez %d \n",pontos);
	
	printf("\n");
	system("pause");
}
