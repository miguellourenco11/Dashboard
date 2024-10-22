#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int mes;
	
	printf("Introduza um mês de 1 a 12 \n");
	scanf("%d",&mes);
	
	switch(mes)
	{
		case 1: printf("janeiro \n");break;
		case 2: printf("fevereiro \n");break;
		case 3: printf("março \n");break;
		case 4: printf("abril \n");break;
		case 5: printf("maio \n");break;
		case 6: printf("junho \n");break;
		case 7: printf("julho \n");break;
		case 8: printf("agosto \n");break;
		case 9: printf("setembro \n");break;
		case 10: printf("outubro \n");break;
		case 11: printf("novembro \n");break;
		case 12: printf("dezembro \n");break;
		
		default: printf("Opção inválida");
	}
	
	printf("\n");	
	system("pause");
}
