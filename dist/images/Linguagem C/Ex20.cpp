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
		printf("O valor é %d \n",valor);
	if (valor<0)
		printf("O valor é %d então é negativo \n",valor);
	if (valor>0)
		printf("O valor é %d então é positivo \n",valor);

	system("pause");
}
