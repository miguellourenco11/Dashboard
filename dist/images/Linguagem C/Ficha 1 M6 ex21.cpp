#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>
#include <math.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	char nome[50];
	int num;
	
	printf("introduza o seu nome \n");
	scanf("%s",&nome);
	
	num=strlen(nome);
	
	printf("O nome com as vogais em maiúsculas \n");
	
	for (int i=0; i<=num; i++)
	{
		if(nome[i]=='a')
			nome[i]='A';
		if(nome[i]=='e')
			nome[i]='E';
		if(nome[i]=='i')
			nome[i]='I';
		if(nome[i]=='o')
			nome[i]='O';
		if(nome[i]=='u')
			nome[i]='U';
		if(nome[i]!='a'||nome[i]!='e'||nome[i]!='i'||nome[i]!='o'||nome[i]!='u')
			printf("%c",nome[i]);
	}

	printf("\n");	
	system("pause");
}
