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
	int soma=0;

	for (int i=0; i<5; i++)
	{
		system("cls");
		printf("Nome?\n");
		scanf("%s",&vet[i].nome);
		printf("Idade?\n");
		scanf("%d",&vet[i].idade);
		printf("Sexo? M-masculino/F-feminino \n");
		scanf("%s",&vet[i].sexo);
		soma=soma+vet[i].idade;
	}
	printf("\n");
	int m=0,f=0;
	for (int i=0; i<5; i++)
	{
		if(vet[i].sexo=='M'||vet[i].sexo=='m')
			m++;
		if(vet[i].sexo=='F'||vet[i].sexo=='f')
			f++;
	}
	printf("\n");
	for (int i=0; i<5; i++)
	{
		printf("aluno: %s \n",vet[i].nome);
		printf("idade: %d \n",vet[i].idade);
		printf("sexo: %c \n",vet[i].sexo);
	}
	printf("\n");

	printf("São do sexo masculino %d pessoas e do sexo feminino %d pessoas \n",m,f);

	printf("\n");
	med=soma/(float)5;

	printf("A média das idades é %.2f \n",med);

	char resp;
	printf("\n");
	printf("Pretende repetir o programa? S/N \n");
	scanf("%s",&resp);
	if(resp=='s'||resp=='S')
		goto inicio;
	else
		printf("O programa acabou \n");
}
