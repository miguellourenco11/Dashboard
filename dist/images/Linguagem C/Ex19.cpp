#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	float trab,teste,med;
	
	printf("Introduza a nota do trabalho \n");
	scanf("%f",&trab);
	printf("Introduza a nota do teste \n");
	scanf("%f",&teste);
	
	med=teste*0.4+trab*0.6;
	
	printf("\n");
	if (med>=9.5)
		printf("A m�dia � %.2f e o aluno est� aprovado \n", med);
	else
		printf("A m�dia � %.2f e o aluno est� reprovado \n", med);
	
	system("pause");
}
