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

	printf("Introduza o sal�rio de um funcion�rio de uma empresa \n");
	scanf("%f",&salario);
	printf("Introduza o sexo(M-masculino / F-feminino) de um funcion�rio de uma empresa \n");
	scanf("%s",&sexo);
	
	if(sexo=='M'||sexo=='m')
		printf("O sal�rio dos homens � %.2f \n",salario-(salario*0.15));
	if(sexo=='F'||sexo=='f')
		printf("O sal�rio das mulheres � %.2f \n",salario-(salario*0.10));
		
	printf("\n");
	system("pause");
	
}
