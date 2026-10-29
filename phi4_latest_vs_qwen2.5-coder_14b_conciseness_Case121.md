To design a robust and scalable system for inter-agent communication and coordination in a dynamic, self-organizing network of autonomous agents, the following structural and operational principles must be adhered to:

1. **Decentralized Communication Protocol**: Implement a peer-to-peer communication protocol that allows agents to exchange information without a central authority. This ensures resilience against single points of failure and supports scalability as the number of agents grows.

2. **Consensus Mechanism**: Utilize a consensus algorithm, such as Byzantine Fault Tolerance (BFT) or a variant of the Raft protocol, to ensure that agents can agree on the state of the system despite the presence of faulty or malicious agents. This is crucial for maintaining system integrity and consistency.

3. **Dynamic Resource Allocation**: Employ a distributed ledger or blockchain to track resource allocation and usage. This provides a transparent and immutable record that agents can reference to make informed decisions about resource distribution.

4. **Adaptive Learning Algorithms**: Integrate machine learning models that enable agents to adapt to changing resource demands and environmental conditions. Reinforcement learning can be particularly effective, allowing agents to optimize their behavior based on feedback from the system.

5. **Fault Tolerance and Redundancy**: Design the system with redundancy at both the hardware and software levels. Use techniques such as replication and sharding to ensure that the failure of individual agents or nodes does not compromise the overall system functionality.

6. **Autonomy and Coordination Balance**: Implement a hierarchical control structure where agents operate autonomously within defined parameters but can escalate decisions to higher-level agents or clusters when necessary. This balances individual autonomy with collective efficiency.

7. **Scalability through Modular Design**: Architect the system with modular components that can be independently scaled. This allows for the addition of new agents or resources without disrupting existing operations.

8. **Real-time Monitoring and Analytics**: Deploy a real-time monitoring system that provides insights into agent performance and resource utilization. Use this data to dynamically adjust system parameters and improve efficiency.

9. **Security Measures**: Incorporate robust encryption and authentication protocols to protect inter-agent communication from unauthorized access and tampering.

10. **Evolutionary Adaptation**: Design the system to support continuous integration and deployment (CI/CD) practices, allowing for the seamless introduction of updates and improvements in response to evolving demands.

By adhering to these principles, the system can achieve a balance between individual agent autonomy and collective system-level efficiency, while remaining resilient to unpredictable failures and evolving resource demands.