#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	printf("Ol� Mundo!");
	
	system("pause");
}
