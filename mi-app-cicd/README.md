# Mi App CI/CD 🚀

Aplicación ejemplo con pipeline CI/CD usando GitHub Actions.

## Estructura
- `.github/workflows/` - Pipelines de CI/CD
- `.devops/k8s/` - Configuración de Kubernetes
- `src/` - Código de la aplicación
- `Dockerfile` - Contenedor de la aplicación

## Pipeline
1. **CI**: Build y test en cada PR
2. **CD**: Deploy automático a Kubernetes en main