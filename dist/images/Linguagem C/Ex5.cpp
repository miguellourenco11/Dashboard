#include <stdio.h>
#include <locale.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	printf("\tOl� Mundo!\n");
	
	printf("Ol� \\ Mundo!\n");
}
