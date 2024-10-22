#include <stdio.h>
#include <locale.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	printf("\tOlá Mundo!\n");
	
	printf("Olá \\ Mundo!\n");
}
