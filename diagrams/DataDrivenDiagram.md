# Class Diagram: Data-Driven Approach
+------------------+
|  AppInterface    |
|------------------|
| + run()          |
+------------------+
          ^
          |
          |
+-------------------+       +-------------------+
| DataDrivenApp     |       | DataLoaderInterface|
|-------------------|       |-------------------|
| - dataLoader      |       | + loadData(filePath: string): array |
|-------------------|       +-------------------+
| + run()           |                ^
+-------------------+                |
          |                          |
          |                          |
          |                          |
+-------------------+       +-------------------+
| JsonDataLoader    |       | FarmRhyme         |
|-------------------|       |-------------------|
| + loadData(filePath: string): array | - animals: array          |
+-------------------+       |-------------------|
                            | + addAnimal(animal: AnimalInterface)|
                            | + printVerse()    |
                            +-------------------+
                                       |
                                       |
                                       |
                                +----------------+
                                | AnimalInterface|
                                |----------------|
                                | + getName(): string|
                                | + getSound(): string|
                                +----------------+
                                       ^
                                       |
              +------------------------+----------------------+
              |                        |                      |
+-------------------+  +-------------------+  +-------------------+
|      Cat          |  |      Dog          |  |    UserAnimal     |
|-------------------|  |-------------------|  |-------------------|
| + getName(): string|  | + getName(): string|  | + getName(): string|
| + getSound(): string|  | + getSound(): string|  | + getSound(): string|
+-------------------+  +-------------------+  +-------------------+
