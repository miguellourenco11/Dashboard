#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int valor;
	
	printf("Introduza um valor \n");
	scanf("%d",&valor);
	
	printf("\n");
	if (valor==0)
		printf("O valor � %d \n",valor);
	else if (valor<0)
		printf("O valor � %d ent�o � negativo \n",valor);
	else
		printf("O valor � %d ent�o � positivo \n",valor);

	system("pause");
}
