#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	float valor;
	char distrito;
	
	printf("Introduza o valor e o distrito(C=COI, L=LIS; P=POR; E=EVO) do produto \n");
	scanf("%f" "%s",&valor,&distrito);
	
	switch(distrito)
	{
		case 'C':printf("O valor final mais o imposto é %.2f \n",valor+(valor*0.07));break;
		case 'L':printf("O valor final mais o imposto é %.2f \n",valor+(valor*0.12));break;
		case 'P':printf("O valor final mais o imposto é %.2f \n",valor+(valor*0.15));break;
		case 'E':printf("O valor final mais o imposto é %.2f \n",valor+(valor*0.08));break;
 
		default: printf("distrito inválido \n");
	}

	system("pause");
}
