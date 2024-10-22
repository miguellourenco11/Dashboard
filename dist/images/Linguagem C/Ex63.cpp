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
	
	struct Aluno A1,A2;
	
	printf("Nome?\n");
	scanf("%s",&A1.nome);
	printf("Idade?\n");
	scanf("%d",&A1.idade);
	
	printf("Nome?\n");
	scanf("%s",&A2.nome);
	printf("Idade?\n");
	scanf("%d",&A2.idade);
	
	if(A1.idade==A2.idade)
		printf("Os alunos têm a mesma idade!\n");
		
	if(A1.idade>A2.idade)
		printf("O aluno mais velho é %s \n",A1.nome);
		
	if(A2.idade>A1.idade)
		printf("O aluno mais velho é %s \n",A2.nome);
	
	char resp;
	printf("\n");
	printf("Pretende repetir o programa? S/N \n");
	scanf("%s",&resp);
	if(resp=='s'||resp=='S')
		goto inicio;
	else
		printf("O programa acabou \n");
}
