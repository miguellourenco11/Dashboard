#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

struct Aluno{
int num;
char nome[50];
int idade;
char sexo;
};
	
main()
{
	setlocale(LC_ALL, "Portuguese");
	
	inicio:

	system("cls");
	
	struct Aluno vet[5];
	float med;
	int soma;
	
	for (int i=0; i<5; i++)
	{
		printf("Nome?\n");
		scanf("%s",&vet[i].nome);
		printf("Idade?\n");
		scanf("%d",&vet[i].idade);
		soma=soma+vet[i].idade;
	}
	printf("\n");
	for (int i=0; i<5; i++)
	{
		printf("O aluno %s, tem idade %d\n",vet[i].nome,vet[i].idade);
	}
	
	med=soma/(float)5;
	
	printf("A média das idades é %.2f",med);
	
	char resp;
	printf("\n");
	printf("Pretende repetir o programa? S/N \n");
	scanf("%s",&resp);
	if(resp=='s'||resp=='S')
		goto inicio;
	else
		printf("O programa acabou \n");
}
