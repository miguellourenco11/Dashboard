#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");

	int dia;

	printf("Introduza um dia de 1 a 7 \n");
	scanf("%d",&dia);

	switch(dia)
	{
		case 1: printf("domingo \n");break;
		case 2: printf("segunda \n");break;
		case 3: printf("ter�a \n");break;
		case 4: printf("quarta \n");break;
		case 5: printf("quinta \n");break;
		case 6: printf("sexta \n");break;
		case 7: printf("s�bado \n");break;

		default: printf("Op��o inv�lida");
	}

	printf("\n");	
	system("pause");
}
