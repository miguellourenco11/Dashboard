#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	char EC;
	
	printf("Introduza um caracter(estado civil) \n");
	scanf("%c",&EC);
	
	switch(EC)
	{
		case 'C': printf("Casado \n");break;
		case 'D': printf("Divorciado \n");break;
		case 'V': printf("Viuvo \n");break;
		case 'S': printf("Solteiro \n");break;
		case 'c': printf("Casado \n");break;
		case 'd': printf("Divorciado \n");break;
		case 'v': printf("Viuvo \n");break;
		case 's': printf("Solteiro \n");break;
		
		default: printf("Opção inválida");
	}
	
	printf("\n");	
	system("pause");
}
