#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int vet[50],soma=0,conta=0,quant,nota;
	
	printf("introduza a quantidade de alunos \n");
	scanf("%d",&quant);
	
	for(int i=0; i<quant; i++)
	{
		printf("introduza a nota do aluno \n");
		scanf("%d",&vet[i]);
		soma=soma+vet[i];
		if(vet[i]>5)
			conta++;
	}

	float med;
	med=soma/(float)quant;

	if(conta!=0)
			printf("Estão com nota acima de 5, %d alunos \n",conta);
		else
			printf("Não há nenhum aluno com nota acima de 5 \n");

	printf("A média é %.2f \n",med);
	printf("\n");
	system("pause");
}
