#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	float teste,trab,def,med;
	
	printf("Introduza o nota do teste do trabalho e da defesa de um aluno \n");
	scanf("%f" "%f" "%f",&teste,&trab,&def);
	
	med=(teste*0.6)+(trab*0.2)+(def*0.2);
	
	if(med>9.5)
		printf("O aluno est� aprovado \n");
	else
		printf("O aluno est� reprovado \n");

	printf("A m�dia � %.2f \n",med);
	
	system("pause");
}
