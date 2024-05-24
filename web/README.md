# Homework

Create web service with REST API which provide info about wether stations in Latvia.

Requirements:
1. API should expose two endpoints:
   
    - List of all stations with two properties: `Station_id` and `Name`,
    - Station details by `Station_id` with all data fields found in data source;

2. In order to limit access to API implement simple HTTP bearer preshared key authentication;
3. Write Unittests if neecessary;
4. Write OpenAPI specification for service;
5. Create Dockerfile so webservice can be used by runing `docker run`;
6. Assume data in data source is subject of change;
7. Use data from open data source: https://data.gov.lv/dati/lv/dataset/hidrometeorologiskie-noverojumi/resource/c32c7afd-0d05-44fd-8b24-1de85b4bf11d;
8. Commit each step;
9. Provide result as GitHub repository.
