# Multi-stage build
FROM node:18-alpine as builder

WORKDIR /app
COPY src/ .
RUN echo "Build completed"

FROM nginx:alpine

# Copy built assets
COPY --from=builder /app/ /usr/share/nginx/html/

# Copy nginx config
COPY .devops/nginx/nginx.conf /etc/nginx/conf.d/default.conf

# Security
RUN addgroup -g 1001 -S appgroup && \
    adduser -S appuser -u 1001 -G appgroup && \
    chown -R appuser:appgroup /var/cache/nginx && \
    chown -R appuser:appgroup /var/run

USER appuser

EXPOSE 8080

HEALTHCHECK --interval=30s --timeout=3s \
  CMD curl -f http://localhost:8080/ || exit 1

CMD ["nginx", "-g", "daemon off;"]