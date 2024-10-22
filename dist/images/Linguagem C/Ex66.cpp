#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

struct Atleta{
int idade;
float altura;
};

main()
{
	setlocale(LC_ALL, "Portuguese");

	inicio:

	system("cls");

	struct Atleta vet[10];
	float medidade,medalt,soma2=0;
	int soma=0;

	for (int i=0; i<10; i++)
	{
		system("cls");
		printf("Idade?\n");
		scanf("%d",&vet[i].idade);
		printf("Altura?\n");
		scanf("%f",&vet[i].altura);
		soma=soma+vet[i].idade;
		soma2=soma2+vet[i].altura;
	}
	printf("\n");
	for (int i=0; i<10; i++)
	{
		printf("idade: %d \n",vet[i].idade);
		printf("altura: %.2f \n",vet[i].altura);
	}
	printf("\n");

	medidade=soma/(float)10;
	medalt=soma2/(float)10;

	printf("A média das idades é %.2f \n",medidade);
	printf("A média das alturas é %.2f \n",medalt);

	char resp;
	printf("\n");
	printf("Pretende repetir o programa? S/N \n");
	scanf("%s",&resp);
	if(resp=='s'||resp=='S')
		goto inicio;
	else
		printf("O programa acabou \n");
}
