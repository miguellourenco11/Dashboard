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

	char nomes[5][30];
	float notas[5],melhor=0,pior=1000;
	int posicao,posi;

	for (int i=1; i<=5; i++)
	{
		printf("Introduza o nome do aluno \n");
		scanf("%s",&nomes[i]);
		printf("Introduza a nota do aluno \n");
		scanf("%f",&notas[i]);
		printf("\n");

		if(notas[i]>melhor)
		{
			melhor=notas[i];
			posicao=i;
		}
		if(notas[i]<pior)
		{
			pior=notas[i];
			posi=i;
		}
	}

	printf("O nome do pior aluno é %s \n",nomes[posi]);
	printf("O nome do melhor aluno é %s \n",nomes[posicao]);

	char resp;
	printf("\n");
	printf("Pretende repetir o programa? S/N \n");
	scanf("%s",&resp);
	if(resp=='s'||resp=='S')
		goto inicio;
	else
		printf("O programa acabou \n");
}
