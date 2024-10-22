#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>

main()
{
	setlocale(LC_ALL, "Portuguese");

	float alt,peso,IMC;

	printf("introduza a altura e o peso de uma pessoa\n");
	scanf("%f" "%f",&alt,&peso);

	IMC=peso/(float)(alt*alt);
	
	printf("O IMC é %.2f \n",IMC);
	
	if(IMC<18.5)
	{
		printf("Baixo Peso");
	}
	
	if(IMC>=18.5 && IMC<=24.9)
	{
		printf("Peso Normal");
	}
	
	if(IMC>=25 && IMC<=29.9)
	{
		printf("Pré-Obesidade");
	}
	if(IMC>=30 && IMC<=34.9)
	{
		printf("Obesidade grau I");
	}
	if(IMC>=35 && IMC<=39.9)
	{
		printf("Obesidade grau II");
	}
	if(IMC>40)
	{
		printf("Obesidade grau III");
	}
	
	printf("\n");	
	system("pause");
}
