#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	float salario;
	char sexo;

	printf("Introduza o salário de um funcionário de uma empresa \n");
	scanf("%f",&salario);
	printf("Introduza o sexo(M-masculino / F-feminino) de um funcionário de uma empresa \n");
	scanf("%s",&sexo);
	
	if(sexo=='M'||sexo=='m')
		printf("O salário dos homens é %.2f \n",salario-(salario*0.15));
	if(sexo=='F'||sexo=='f')
		printf("O salário das mulheres é %.2f \n",salario-(salario*0.10));
		
	printf("\n");
	system("pause");
	
}
